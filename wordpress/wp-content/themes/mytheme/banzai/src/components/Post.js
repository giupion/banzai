import React from 'react';
import { Card } from 'react-bootstrap';
import "@fontsource/east-sea-dokdo/400.css";

const Post = ({ title, content }) => (
  <Card >
    <Card.Body>
      <Card.Title>{title}</Card.Title>
      <Card.Text dangerouslySetInnerHTML={{ __html: content }} />
    </Card.Body>
  </Card>
);

export default Post;