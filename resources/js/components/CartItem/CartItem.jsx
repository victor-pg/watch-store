import React from 'react';
import "./CartItem.scss";

const CartItem = ({ item,deleteFromCart }) => {
    return (
        <div className="cart-item">
            <img src={`img/${item.img}`} alt="cart-item-image" />
            <div className="cart-item-text">
                <p className="cart-item-text-title">{item.title}</p>
                <p className="cart-item-text-description lead">{item.description}</p>
            </div>
            <div className="cart-item-price font-weight-bold">${item.price}</div>
            <div className="cart-item-delete-button">
                <button className="btn" onClick={()=>deleteFromCart(item.id)}>
                    <img src={'img/delete.png'} alt="cart-item-delete-button"/>
                </button>
            </div>
        </div>
    );
}

export default CartItem;