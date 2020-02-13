import React, { useState } from "react";
import _ from "lodash";

export default function Summary({
  questions,
  onSetQuestion: handleSetQuestion
}) {
  return (
    <>
      <h1>Hello, Meghan!</h1>
      <p>
        We're so looking forward to hosting you for our wedding at Deep
        Mountain.
      </p>
      <h3 className="mb-3">Here's what we've got so far!</h3>
      <div className="row">
        {questions.map(([klass, answer], i) => (
          <Question
            key={klass.question}
            klass={klass}
            answer={answer}
            onChange={() => handleSetQuestion(i)}
          />
        ))}
      </div>
    </>
  );
}

function formatAnswer(answer)
{
  if(_.isArray(answer)){
    if(answer.length == 0)
    {
      return "Just me"
    }
    return answer.join((', '))
  }

  if(_.isObject(answer)){
    const events = []
    Object.entries(answer).forEach(([event, going]) =>{
      switch(going){
        case "yes":
          events.push(event);
          break;
        case "maybe":
          events.push(`${event} (maybe)`);
          break;
      }
    })
    return events.join(", ");
  }

  return answer;
}

function Question({ klass, answer, onChange: handleChange }) {
  return (
    <>
      <div className="col">
        <strong>{klass.question}</strong>
      </div>
      <div className="col">
        {answer ? (
          <>
            {formatAnswer(answer)}
            <small className="ml-3">
              <a href="#" className="text-muted" onClick={handleChange}>
                update
              </a>
            </small>
          </>
        ) : (
          <a href="#" onClick={handleChange}>
            let us know!
          </a>
        )}
      </div>
      <div className="w-100 mb-2"></div>
    </>
  );
}
