from flask import Flask, request, render_template
import requests
import base64
import datetime
import csv
import os
import time
from dotenv import load_dotenv  

load_dotenv() 

app = Flask(__name__, template_folder="templates")

API_USERNAME = os.getenv("API_USERNAME")
API_PASSWORD = os.getenv("API_PASSWORD")

call_counter = {
    "timestamp": time.time(),
    "count": 0
}

def make_call(connect_to, call_to, caller_id, timeout):
    url = (
        "https://api01.gestionvoz.net/url2call/309/json/phone2phone"
        f"?connectTo={connect_to}&callTo={call_to}&callerId={caller_id}&timeout={timeout}"
    )

    auth_string = f"{API_USERNAME}:{API_PASSWORD}"
    auth_encoded = base64.b64encode(auth_string.encode()).decode()

    headers = {
        "Authorization": f"Basic {auth_encoded}",
        "Content-Type": "application/json"
    }

    response = requests.get(url, headers=headers)

    try:
        result = response.json()
    except ValueError:
        result = {"status": "error", "uniqueId": "-"}

    with open("calls_log.csv", mode="a", newline="") as file:
        writer = csv.writer(file)
        writer.writerow([
            1,
            caller_id,
            connect_to,
            call_to,
            datetime.datetime.now(),
            result.get("status", "error"),
            result.get("uniqueId", "-")
        ])

    return result

@app.route("/", methods=["GET", "POST"])
def index():
    global call_counter
    if request.method == "POST":
        current_time = time.time()

        if current_time - call_counter["timestamp"] > 60:
            call_counter["timestamp"] = current_time
            call_counter["count"] = 0

        if call_counter["count"] >= 5:
            result = {"status": "Límite alcanzado – inténtalo de nuevo en un minuto.", "uniqueId": "-"}
            return render_template("phoneapp_new.html", result=result)

        call_counter["count"] += 1

        connect_to = request.form["connectTo"]
        call_to = request.form["callTo"]
        caller_id = request.form["callerId"]
        timeout = int(request.form["timeout"])

        result = make_call(connect_to, call_to, caller_id, timeout)
        return render_template("phoneapp_new.html", result=result)
    
    return render_template("phoneapp_new.html", result=None)

if __name__ == "__main__":
    app.run(debug=True)

# wymuszona zmiana 2
# zmiana przez Notatnik


