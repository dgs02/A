'use strict';

function formatDate(date) {
    const now = new Date();
    const diff = now - date;
    
    if (diff < 1000) {
      return "ahora mismo";
    } else if (diff < 60000) {
      return `hace ${Math.floor(diff / 1000)} seg.`;
    } else if (diff < 3600000) {
      return `hace ${Math.floor(diff / 60000)} min.`;
    } else {
      const day = String(date.getDate()).padStart(2, '0');
      const month = String(date.getMonth() + 1).padStart(2, '0');
      const year = String(date.getFullYear()).slice(2);
      const hours = String(date.getHours()).padStart(2, '0');
      const minutes = String(date.getMinutes()).padStart(2, '0');
      
      return `${day}.${month}.${year} ${hours}:${minutes}`;
    }
  }
  
  // Ejemplo de uso:
  const date = new Date(2023, 0, 26, 15, 30); // 26 de enero de 2023, 15:30
  console.log(formatDate(date)); // Debería mostrar "26.01.23 15:30"
  