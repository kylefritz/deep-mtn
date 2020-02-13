import React, { useState } from "react";
import { useForm } from "react-hook-form";
import _ from "lodash";

export default function Q3({ answer, onAnswer: handleAnswer }) {
  const rsvps = answer || {};
  const { register, handleSubmit } = useForm();
  const onSubmit = data => {
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
            <Event key={name} name={name} register={register} rsvp={rsvps[name]} />
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

function Event({ name, register, rsvp }) {
  const key = _.kebabCase(name);
  return (
    <div className="col">
      <div className="card my-2">
        <div className="card-header">
          <h5 className="text-nowrap">{name}</h5>
        </div>

        <div className="card-body">
          {["yes", "maybe", "no"].map(value => (
            <Radio {...{ name, value, rsvp, register }} />
          ))}
        </div>
      </div>
    </div>
  );
}

function Radio({ name, value, rsvp, register }) {
  const id = `${_.kebabCase(name)}-${value}`;
  return (
    <div className="form-check">
      <input
        className="form-check-input"
        type="radio"
        name={name}
        id={id}
        value={value}
        ref={register}
        defaultChecked={rsvp == value}
      />
      <label className="form-check-label" htmlFor={id}>
        {`${_.capitalize(value)}${value == "yes" ? "!" : ""}`}
      </label>
    </div>
  );
}