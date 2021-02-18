import React from 'react';
import { Link } from 'react-router-dom';
import "./HomePage.scss";

const HomePage = () => {
  return (
    <div className="home-page">
      <h3 className="lead">Vezi cele mai noi ceasuri<br />
        La cele mai mici preturi<br />
        Cu cea mai rapida livrare<br />
        <Link to="/watches">
          <button className="btn">Mai multe &raquo;</button>
        </Link>
      </h3>
    </div>
  );
}
export default HomePage;