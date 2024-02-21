import React, { useState, useEffect } from 'react';
import axios from 'axios';

const UserSection = () => {
  const [users, setUsers] = useState([]);

  useEffect(() => {
    const fetchArticles = async () => {
      try {
        const response = await axios.get('http://localhost/progettoreactwordpress/wordpress/wp-json/wp/v2/categories');
        setUsers(response.data);
      } catch (error) {
        console.error('Errore nel recupero degli articoli:', error);
      }
    };

    fetchArticles();
  }, []);

  return (
    <div>
      <h2>Utenti</h2>
      <ul>
        {users.map((categories) => (
          <li key={users.id}>{users.title.rendered}</li>
        ))}
      </ul>
    </div>
  );
};

export default UserSection;