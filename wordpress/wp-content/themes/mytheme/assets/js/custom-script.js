document.addEventListener('DOMContentLoaded', () => {
    const apiUrl = 'http://localhost/S3L1/wordpress/wp-json/wp/v2/users';
  
    const fetchData = async () => {
      try {
        const response = await fetch(apiUrl);
        const data = await response.json();
        displayUsers(data);
        console.log(data)
      } catch (error) {
        console.error('Error fetching data:', error);
      }
    };

    
  
    const displayUsers = (users) => {
      const appElement = document.getElementById('app');
  
      users.forEach(user => {
        const userElement = document.createElement('div');
        userElement.classList.add('user');
  
        const nameElement = document.createElement('h1');
        nameElement.textContent = user.name;
  
        const emailElement = document.createElement('p');
        emailElement.textContent = `ID: ${user.id}`;
  
        userElement.appendChild(nameElement);
        userElement.appendChild(emailElement);
  
        appElement.appendChild(userElement);
      });
    };
  
    fetchData();
  });