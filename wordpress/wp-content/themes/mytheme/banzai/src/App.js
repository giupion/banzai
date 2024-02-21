import React, { useState, useEffect } from 'react';
import axios from 'axios';
import { Container, Row, Col, Button } from 'react-bootstrap';
import Post from './components/Post';
import Navbar from './components/Navbar';
import Footer from './components/Footer';
import './App.css';

import 'bootstrap/dist/css/bootstrap.min.css'

const App = () => {
  const [posts, setPosts] = useState([]);
  const [categories, setCategories] = useState([]);
  const [selectedCategory, setSelectedCategory] = useState('');

  useEffect(() => {
    const fetchCategories = async () => {
      try {
        const response = await axios.get('http://localhost/progettoreactwordpress/wordpress/wp-json/wp/v2/categories');
        setCategories(response.data);
      } catch (error) {
        console.error('Errore nel recupero delle categorie:', error);
      }
    };

    fetchCategories();
  }, []);

  useEffect(() => {
    const fetchPosts = async () => {
      try {
        const response = await axios.get('http://localhost/progettoreactwordpress/wordpress/wp-json/wp/v2/posts', {
          params: {
            categories: selectedCategory,
          },
        });
        setPosts(response.data);
        console.log(response.data)
      } catch (error) {
        console.error('Errore nel recupero dei post:', error);
      }
    };

    fetchPosts();
  }, [selectedCategory]);

  const handleCategoryChange = (categoryId) => {
    setSelectedCategory(categoryId);
  };

  return (
    <Container>
      <Navbar/>
      <h1 >Banzai!</h1>
      <h2>Alla scoperta del Giappone, scegli una categoria e leggi l'articolo dei nostri migliori Blog!  </h2>
      <div>
        <h1>Seleziona una categoria:</h1>
        <select onChange={(e) => handleCategoryChange(e.target.value)} value={selectedCategory}>
          <option value="">Tutte le categorie</option>
          {categories.map((category) => (
            <option key={category.id} value={category.id}>
              {category.name}
            </option>
          ))}
        </select>
        <Button variant="danger" size="sm" onClick={() => handleCategoryChange('')}>
          Reset Filtri
        </Button>
      </div>
      <Row>
        {posts.map((post) => (
          <Col key={post.id} xs={12} md={6} lg={4}>
            <Post title={post.title.rendered} content={post.content.rendered} />
          </Col>
        ))}
      </Row>
      <Footer/>
    </Container>
  );
};

export default App;