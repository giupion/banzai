import React from 'react';

const Post = ({ title, content }) => (
  <div>
    <h2>{title}</h2>
    <div dangerouslySetInnerHTML={{ __html: content }} />
  </div>
);

export default Post;