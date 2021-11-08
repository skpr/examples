import React from 'react';

import Results from './Results'

import './styles.css';

const API = '/api/v1/elasticsearch/prod_content/_search';

export default class App extends React.Component {

  constructor(props) {
    super(props);

    this.state = {
      results : [],
    };
  }

  componentDidMount() {
    fetch(API)
      .then(response => response.json())
      .then(results => this.setState({ results: results.hits.hits }));
  }

  render() {
    return (
      <div className="page page__container">
        <article className="section__content">
          <h2>Search Results</h2>
          <Results results={this.state.results}/>
        </article>
      </div>
    );
  }

}
