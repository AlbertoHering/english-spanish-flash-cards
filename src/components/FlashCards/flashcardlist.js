import React from "react"

function jump2(e) {
    const currentTarget = e.target.value
    e.target.value = 0
    window.location.replace('/#'+currentTarget)
}

function FlashCard({items}) {
    return <section id="sectionsList">
        <select onChange={jump2}>
            <option value="0">FORMAS DE:</option>
            {
                items.map((item, index) => {
                    const option = item.title.replace('Formas de r','R').replace('Formas de ','')
                    return (<option value={'bm_'+index} key={index}>{option}</option>);
                })
            }
        </select>
    </section>

}

export default FlashCard