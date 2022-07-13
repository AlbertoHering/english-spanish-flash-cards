import React from "react"
import BulletList from "../BulletList"

function FlashCard({items}) {
    return <section id="sections">
        {
            items.map((item, index) => {
                return (
                    <div id={'bm_'+index} key={index}>
                        <h5><a href="#top">Top</a>{item.title}</h5>
                        <BulletList items={item.content} />
                    </div>
                );
            })
        }
    </section>

}

export default FlashCard