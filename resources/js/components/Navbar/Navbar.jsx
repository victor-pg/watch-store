import React from 'react';
import { Link } from 'react-router-dom';
import "./Navbar.scss";

const Navbar = ({ loggedIn }) => {

    return (
        <nav>
            <ul>
                <li><Link to="/">Home</Link></li>
                <li><Link to="/watches">Ceasuri</Link></li>
                <li><Link to="/cart">Cos</Link></li>
                {/* {
                    loggedIn ?
                        <li className="username">Test</li>
                        :
                        <>
                            <li>Login</li>
                            <li>Register</li>
                        </>
                } */}
            </ul>
        </nav>
    );
}

export default Navbar;