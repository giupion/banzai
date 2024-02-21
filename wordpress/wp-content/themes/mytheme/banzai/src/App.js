
import React, { useState, useEffect } from 'react';
import axios from 'axios';

const App = () => {
  const [posts, setPosts] = useState([]);

  useEffect(() => {
    const fetchPosts = async () => {
      try {
        const response = await axios.get('http://localhost/progettoreactwordpress/wordpress/wp-json/wp/v2/posts');
        setPosts(response.data);
      } catch (error) {
        console.error('Errore nel recupero dei post:', error);
      }
    };

    fetchPosts();
  }, []);

  return (
    <div>
      <h1>WordPress React App</h1>
      <ul>
        {posts.map(post => (
          <li key={post.id}>
            <h2>{post.title.rendered}</h2>
            <div dangerouslySetInnerHTML={{ __html: post.content.rendered }} />
          </li>
        ))}
      </ul>
    </div>
  );
};

export default App;