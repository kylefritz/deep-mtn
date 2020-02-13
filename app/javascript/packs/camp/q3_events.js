import React, { useState } from "react";
import { useForm } from "react-hook-form";
import _ from "lodash";

export default function Q3({ onAnswer: handleAnswer }) {
  const { register, handleSubmit } = useForm();
  const onSubmit = data => {
    console.log(data);
    handleAnswer(data);
  };

  const deleteLast = () => setNumGuests(numGuests - 1);

  const events = ["Welcome Paartay", "Main Event", "Farewell Brunch"];

  return (
    <>
      <h1>What events are you coming to?</h1>
      <form onSubmit={handleSubmit(onSubmit)}>
        <div className="row">
          {events.map(name => (
            <Event key={name} name={name} />
          ))}
        </div>

        <button type="submit" className="btn m-3 btn-primary">
          Save
        </button>
      </form>
    </>
  );
}
Q3.question = "Which events?";

function Event({ name }) {
  const key = _.kebabCase(name);
  return (
    <div className="col">
      <div className="card my-2">
        <div className="card-header">
          <h5 className="text-nowrap">{name}</h5>
        </div>

        <div className="card-body">
          <div className="form-check">
            <input
              className="form-check-input"
              type="radio"
              name={key}
              id={`${key}-yes`}
              value="yes"
            />
            <label className="form-check-label" htmlFor={`${key}-yes`}>
              Yes!
            </label>
          </div>
          <div className="form-check">
            <input
              className="form-check-input"
              type="radio"
              name={key}
              id={`${key}-maybe`}
              value="maybe"
            />
            <label className="form-check-label" htmlFor={`${key}-maybe`}>
              Maybe
            </label>
          </div>
          <div className="form-check">
            <input
              className="form-check-input"
              type="radio"
              name={key}
              id={`${key}-no`}
              value="no"
            />
            <label className="form-check-label" htmlFor={`${key}-no`}>
              No
            </label>
          </div>
        </div>
      </div>
    </div>
  );
}
