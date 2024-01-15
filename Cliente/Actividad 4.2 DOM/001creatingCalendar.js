'use strict';

function createCalendar(elem, year, month) {
    const daysOfWeek = ['lunes', 'martes', 'miércoles', 'jueves', 'viernes', 'sábado', 'domingo'];
    const monthNames = ['enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre'];

    const startDate = new Date(year, month - 1, 1);
    const endDate = new Date(year, month, 0);
    
    const table = document.createElement('table');
    const thead = document.createElement('thead');
    const tbody = document.createElement('tbody');

    // Crear encabezados de días de la semana
    const headerRow = document.createElement('tr');
    daysOfWeek.forEach(day => {
        const th = document.createElement('th');
        th.textContent = day;
        headerRow.appendChild(th);
    });
    thead.appendChild(headerRow);
    table.appendChild(thead);

    // Llenar el calendario con los días
    let currentDate = startDate;
    while (currentDate <= endDate) {
        const weekRow = document.createElement('tr');
        for (let i = 0; i < 7; i++) {
            const dayCell = document.createElement('td');
            dayCell.textContent = currentDate.getDate();
            weekRow.appendChild(dayCell);
            currentDate.setDate(currentDate.getDate() + 1);
        }
        tbody.appendChild(weekRow);
    }

    table.appendChild(tbody);
    elem.innerHTML = `<h2>${monthNames[month - 1]} ${year}</h2>`;
    elem.appendChild(table);
}
