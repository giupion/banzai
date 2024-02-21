import React, { useState, useEffect } from 'react';
import axios from 'axios';
import {  Container, Row, Col } from 'react-bootstrap';
import '../node_modules/bootstrap/dist/css/bootstrap.min.css';
import Post from './components/Post'; 
import './App.css';

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
    <Container >
      <h1>Banzai!</h1>
      <Row>
        {posts.map(post => (
          <Col key={post.id} xs={12} md={6} lg={4}>
            <Post title={post.title.rendered} content={post.content.rendered} />
          </Col>
        ))}
      </Row>
    </Container>
  );
};

export default App;