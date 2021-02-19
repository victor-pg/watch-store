import React, { useState, useEffect } from 'react';
import axios from 'axios';
import CartItem from '../../components/CartItem/CartItem';
import "./CartPage.scss";

const CartPage = () => {
    const [cartItems, setCartItems] = useState([]);
    const [totalPrice, setTotalPrice] = useState(0);
    

    useEffect(() => {
        axios.get('/api/cart')
            .then(res => {
                setCartItems(res.data[0])
                setTotalPrice(res.data[1])
            })
            .catch(err => console.log(err));
        console.log('render');
    }, [])

    const deleteFromCart = (id) => {
        axios.delete(`/api/remove-from-cart/${id}`)
            .then(res => {
                setCartItems(cartItems => cartItems.filter(item => item.id !== id));
                setTotalPrice(totalPrice-res.data);
            })
            .catch(err => console.log('err ' + err));
        
    }
    
    return (
        <div className="container cart-page text-center">
            {cartItems.length > 0 ?
                cartItems.map((item) => {
                    return <CartItem item={item} key={item.id} deleteFromCart={(id) => deleteFromCart(id)} />
                })
                :
                <div className="empty-cart-message">
                    <h1 className="display-4 lead">Cosul este gol</h1>  
                </div>
            }
            {
                cartItems.length>0 ? 
                    <h1>Pret total : ${totalPrice}</h1>
                : null
            }
        </div>
    );
}

export default CartPage;