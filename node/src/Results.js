import React from 'react';

export default function Results (props) {
  return (
    <div class="grid results">
      {props.results.map(result =>
        <div class="card grid__col grid--4-col card--green">
          <div class="card__tags">{result._source.type}</div>
          <div class="card__content">
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

