import React, { useState, useEffect } from 'react';
import axios from 'axios';
import WatchItem from '../../components/WatchItem/WatchItem';

import './WatchesPage.scss';

const WatchesPage = () => {
    const [watches, setWatches] = useState([]);
    const [searchValue, setSearchValue] = useState('');

    useEffect(() => {
        axios.get('/api/watches')
            .then(res => setWatches(res.data))
            .catch(err => console.log(err));
        console.log('render');
    }, [])

    const addToCart = (id) => {
        axios.post(`/api/add-to-cart/${id}`)
        .then(res=>console.log('res '+ res))
        .catch(err=>console.log('err '+ err))
    }

    const getSearchValue=(e)=>{
        setSearchValue(e.target.value);
    }
    
    const filteredItems = watches.filter((item)=>{
        return item.title.toLowerCase().indexOf(searchValue.toLocaleLowerCase()) !== -1;
    })

    return (
        <div className="container watches-page">
            <h2 className="watches-title text-center">Produsele noastre</h2>
            <input onChange={getSearchValue} type="text" placeholder="Cauta" className="form-control search-input"/>
            <div className="row justify-content-md-center">
                {
                    filteredItems.map((item) => {
                        return <WatchItem item={item} key={item.id} addToCart={(id)=>addToCart(id)} />
                    })
                }
            </div>
        </div>
    );
}

export default WatchesPage;

