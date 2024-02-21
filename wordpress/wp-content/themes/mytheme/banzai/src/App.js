import React, { useState, useEffect } from 'react';
import axios from 'axios';

const PostCard = ({ title, content }) => (
  <div className="post-card">
    <h2>{title}</h2>
    <div dangerouslySetInnerHTML={{ __html: content }} />
  </div>
);

const App = () => {
  const [posts, setPosts] = useState([]);

  useEffect(() => {
    const fetchPosts = async () => {
      try {
        const response = await axios.get('http://localhost/progettoreactwordpress/wordpress/wp-json/wp/v2/posts');
        setPosts(response.data);
        console.log(response.data);
      } catch (error) {
        console.error('Errore nel recupero dei post:', error);
      }
    };

    fetchPosts();
  }, []);

  return (
    <div>
      <h1>Banzai!</h1>
      <div className="post-container">
        {posts.map(post => (
          <PostCard key={post.id} title={post.title.rendered} content={post.content.rendered} />
        ))}
      </div>
    </div>
  );
};

export default App;