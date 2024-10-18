import './bootstrap';
import { Calendar } from '@fullcalendar/core';
import dayGridPlugin from '@fullcalendar/daygrid';
import '@fullcalendar/daygrid/main.css'; // Importar o CSS do FullCalendar

document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar'); // Certifique-se de ter um div com o id 'calendar'

    var calendar = new Calendar(calendarEl, {
        plugins: [dayGridPlugin],
        initialView: 'dayGridMonth'
    });

    calendar.render();
});
