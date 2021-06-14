import React from "react"
import BulletList from "../BulletList"
import items from "../../assets/items"

function FlashCard() {
    return <section id="sections">
        {
            items.map((item, index) => {
                return (
                    <div key={index}>
                        <h5>{item.title}</h5>
                        <BulletList items={item.content} />
                    </div>
                );
            })
        }
    </section>

}

export default FlashCard