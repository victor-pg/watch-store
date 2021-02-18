import React, { useState, useEffect } from 'react';
import axios from 'axios';
import WatchItem from '../../components/WatchItem/WatchItem';

import './WatchesPage.scss';

const WatchesPage = () => {
    const [watches, setWatches] = useState([]);

    useEffect(() => {
        axios.get('/api/watches')
            .then(res => setWatches(res.data))
            .catch(err => console.log(err));
        console.log('render');
    }, [])

    return (
        <div className="container watches-page">
            <h2 className="watches-title text-center">Produsele noastre</h2>
            <div className="row justify-content-md-center">
                {
                    watches.map((item) => {
                        return <WatchItem item={item} key={item.id}/>
                    })
                }
            </div>
        </div>
    );
}

export default WatchesPage;

