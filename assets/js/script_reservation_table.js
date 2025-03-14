function updateTimeSlots() {
    const timeSelect = document.getElementById("time");
    const dateInput = document.getElementById("date").value;
    const dayOfWeek = new Date(dateInput).getDay();

    const horaires = {
         1: ["11:30", "12:00", "12:30", "13:00", "18:30", "19:00", "19:30", "20:00"], // Lundi
         2: ["11:30", "12:00", "12:30", "13:00", "18:30", "19:00", "19:30", "20:00"], // Mardi
         3: ["11:30", "12:00", "12:30", "13:00", "18:30", "19:00", "19:30", "20:00"], // Mercredi
         4: ["11:30", "12:00", "12:30", "13:00", "18:30", "19:00", "19:30", "20:00"], // Jeudi
         5: ["11:30", "12:00", "12:30", "13:00", "18:30", "19:00", "19:30", "20:00"], // Vendredi
         6: ["11:30", "12:00", "12:30", "13:00", "18:30", "19:00", "19:30", "20:30"], // Samedi
         0: ["11:30", "12:00", "12:30", "13:00", "18:30", "19:00", "19:30", "20:30"]  // Dimanche
     };

    timeSelect.innerHTML = '<option value="">Sélectionnez une heure</option>';
    if (horaires[dayOfWeek]) {
            horaires[dayOfWeek].forEach(time => {
                let option = document.createElement("option");
                option.value = time;
                option.textContent = time;
                timeSelect.appendChild(option);
            });
    }
}
