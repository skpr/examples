import React from 'react';

export default function Results (props) {
  return (
    <div className="grid results">
      {props.results.map(result =>
        <div className="card grid__col grid--4-col card--green" key={result._source.title}>
          <div className="card__tags">{result._source.type}</div>
          <div className="card__content">
            <h2>
              <span>{result._source.title}</span>
            </h2>
            <div dangerouslySetInnerHTML={{__html: result._source.teaser}}></div>
          </div>
        </div>
      )}
    </div>
  )
}

