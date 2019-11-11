import React from 'react';
import ReactDOM from 'react-dom';
import data from './data.json';

function DogCollage() {
    function renderList() {
        return data.map(item => {
            return (
                <div className="album" key={item.id}>
                    <a href={`/dog-show/${item.id}`}>
                        <img src={!item.photos[0] ? "" : item.photos[0].small} className="grid-item" />
                    </a>
                </div>
            )
        })
    }

    return (
        <div className="albums">
            {renderList()}
        </div>
    );
}

export default DogCollage;

if (document.getElementById('dog-collage')) {
    ReactDOM.render(<DogCollage />, document.getElementById('dog-collage'));
}
