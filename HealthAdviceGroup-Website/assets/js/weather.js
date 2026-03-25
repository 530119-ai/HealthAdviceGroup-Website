// weather.js
// 

function getWeather() {
  const city = document.getElementById("city").value;
  const apiKey = "YOUR_API_KEY"; // replace with your API key

  fetch(`https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=${apiKey}&units=metric`)
    .then(response => response.json())
    .then(data => {
      let advice = "";

      if (data.main.temp >= 30) {
        advice = "⚠ High temperatures detected. Stay hydrated and avoid strenuous outdoor activity.";
      } else if (data.main.temp <= 5) {
        advice = "❄ Cold conditions detected. Keep warm and limit exposure to cold weather.";
      } else {
        advice = "✅ Weather conditions are moderate. Maintain normal daily activities.";
      }

      document.getElementById("weatherResult").innerHTML = `
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">${data.name}</h4>
            <p><strong>Temperature:</strong> ${data.main.temp}°C</p>
            <p><strong>Conditions:</strong> ${data.weather[0].description}</p>
            <hr>
            <p><strong>Health Advice:</strong> ${advice}</p>
          </div>
        </div>
      `;
    })
    .catch(() => {
      document.getElementById("weatherResult").innerHTML = `
        <div class="alert alert-danger">
          Unable to retrieve weather data. Please check the location and try again.
        </div>
      `;
    });
}

