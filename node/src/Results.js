import React from 'react';

export default function Results (props) {
  return (
    <div className="grid results">
      {props.results.map(result =>
        <div className="card grid__col grid--4-col" key={result._source.title}>
          <div class="card__tags">
            <div className={`tag tag--${result._source.type}`}>{result._source.type}</div>
          </div>
          <div className="card__content">
            <h2>
              <a href={result._source.url}>{result._source.title}</a>
            </h2>
            <div dangerouslySetInnerHTML={{__html: result._source.teaser}}></div>
          </div>
        </div>
      )}
    </div>
  )
}

