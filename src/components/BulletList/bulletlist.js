import React from "react"

function BulletList({items, skipParent=false}) {
    const list = [
        items.map((item,i) => {
            if (item.category !== undefined ) {
                return <li key={i} className="bulletless"><em>{item.category}</em><ul><BulletList items={item.content} skipParent={true} /></ul></li>
            } else {
                return <li key={i}>
                    {item.prefix?<i>{item.prefix}</i>:""}
                    {
                        Array.isArray(item.exp) ? item.exp.map((e,k) => {
                            return <label key={k}>{{k}>0?' ':''}{e}</label>
                        }) : <label>{item.exp}</label>
                    }
                    <em>{item.desc}</em>
                </li>
            }
        })
    ]

    if ( skipParent )  {
        return list
    } else {
        return <ul>{list}</ul>
    }
    
}

export default BulletList