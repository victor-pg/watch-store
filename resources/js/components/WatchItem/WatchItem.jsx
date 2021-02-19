import React from 'react';
import { Link } from 'react-router-dom';
import "./WatchItem.scss";

const WatchItem = ({item,addToCart}) => {
    return (
        <div className="col-md-3 watch-item text-center">
            <h3 className="lead">{item.title}</h3>
            <img src={`img/${item.img}`} alt="watch-image" />
            <p>{item.description}</p>
            <p className="lead">${item.price}</p>
            <div className="wathces-buttons">
                <Link to={`/watch/${item.id}`} params={{id:item.id}}><button className="btn details-button">Detalii &raquo;</button></Link>
            </div>
            <img onClick={()=>addToCart(item.id)} src="img/addToCart.png" alt="add-to-cart-icons" className="add-to-cart-button"/>
        </div>
    );
}

export default WatchItem;