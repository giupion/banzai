import React from 'react';

const Footer = () => {
  return (
    <footer style={styles.footer}>
      <div style={styles.container}>
        <p>&copy; 2024- Giuseppe Sansone</p>
      </div>
    </footer>
  );
};

const styles = {
  footer: {
    background: 'linear-gradient(to bottom, rgb(255, 13, 5), rgb(225, 224, 224), rgb(255, 6, 6), rgb(225, 224, 224)), rgb(234, 5, 5) !important',
    borderRadius: '10px',
    color: '#fff',
    padding: '20px 0',
    textAlign: 'center',
  },
  container: {
    maxWidth: '1200px',
    margin: '0 auto',
  },
};

export default Footer;