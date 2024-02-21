import React from 'react';
import { Card } from 'react-bootstrap';

const Post = ({ title, content }) => (
  <Card >
    <Card.Body>
      <Card.Title>{title}</Card.Title>
      <Card.Text dangerouslySetInnerHTML={{ __html: content }} />
    </Card.Body>
  </Card>
);

export default Post;