import React, { useState } from "react";
import { useForm } from "react-hook-form";
import _ from "lodash";

export default function Q4({ onAnswer: handleAnswer }) {
  const options = [
    "Camp at Deep Mountain",
    "Inn at Berkeley Springs",
    "Airbnb",
    "Something else"
  ];

  const makeHandler = option => {
    return handleAnswer;
  };

  return (
    <>
      <h1>Where will you stay for the weekend?</h1>
      <p className="text-muted">Hint: you should camp!</p>
      <div className="row mb-5">
        {options.map(name => {
          return (
            <Option
              key={_.kebabCase(name)}
              name={name}
              onClick={makeHandler(name)}
            />
          );
        })}
      </div>
      <br />
      <br />
      <br />
    </>
  );
}
Q4.question = "Staying where?";

function Option({ name, onClick: handleClick }) {
  return (
    <div className="col">
      <button
        type="button"
        className="btn btn-outline-primary m-3"
        onClick={() => handleClick(name)}
      >
        <img src="https://place-hold.it/200x200" className="mt-2 mb-2" />
        <br />
        <span className="text-nowrap">{name}</span>
      </button>
    </div>
  );
}
