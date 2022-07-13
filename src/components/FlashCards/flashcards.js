import React, { useState, useEffect } from "react"
import FlashCard from "./flashcard"
import FlashCardList from "./flashcardlist"
import axios from "axios"
import itemlist from "./items.json"

function FlashCards() {

    const [isLoading, setLoading] = useState(true);
    const [items, setItems] = useState();
    useEffect(() => {
        //const API_PATH = 'http://local/items.json'
        //axios.get(
        //    `${API_PATH}`, { crossdomain: true }
        //    ).then(response => {
                setItems(itemlist);
                setLoading(false);
        //    });
      }, []);

    if (isLoading && !!!items) {
        return <div>Cargando...</div>;
    }

    return <div>
        <p>Algunas sugerencias sobre lo que decir en inglés, formales e informales...</p>
        <div>
            <FlashCardList items={items} />
            <FlashCard items={items} />
        </div>
    </div>
}

export default FlashCards