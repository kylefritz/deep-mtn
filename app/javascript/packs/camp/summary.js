import React, { useState } from "react";
import _ from "lodash";

export default function Summary({
  questions,
  onSetQuestion: handleSetQuestion
}) {
  return (
    <>
      <h1>Here's what we got so far!</h1>
      {questions.map(([klass, answer], i) => (
        <Question
          key={klass.question}
          klass={klass}
          answer={answer}
          onChange={() => handleSetQuestion(i)}
        />
      ))}
    </>
  );
}

function Question({ klass, answer, onChange: handleChange }) {
  return (
    <div className="row">
      <div className="col">
        <strong>{klass.question}</strong>
      </div>
      <div className="col">
        {answer || <a href="#" onClick={handleChange}>
          let us know!
        </a>}
      </div>
      <div className="col">
        {answer && <a href="#" onClick={handleChange}>
          update
        </a>}
      </div>
    </div>
  );
}
