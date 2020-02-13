import React, { useState } from "react";
import { useForm } from "react-hook-form";
import _ from "lodash";

export default function Q4({ onAnswer: handleAnswer }) {
  const [option, setOption] = useState(null);

  return (
    <>
      <h1>Where will you stay for the weekend!?</h1>
      <p className="text-muted">Hint: you should camp!</p>
      {option ? (
        <Selection
          option={option}
          onAnswer={handleAnswer}
          onClear={() => setOption(null)}
        />
      ) : (
        <Options onClick={setOption} />
      )}
    </>
  );
}
Q4.question = "Where are you staying?";

function Options({ onClick: handleClick }) {
  const options = [
    "Camp at Deep Mountain",
    "Inn at Berkeley Springs",
    "Airbnb",
    "Something else"
  ];

  return (
    <div className="row">
      {options.map(name => {
        const key = _.kebabCase(name);
        return (
          <div className="col" key={key}>
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
      })}
    </div>
  );
}

function Selection({ option, onAnswer: handleAnswer, onClear: handleClear }) {
  const { register, handleSubmit } = useForm();
  const onSubmit = data => {
    console.log(data);
    handleAnswer(option);
  };

  return (
    <form onSubmit={handleSubmit(onSubmit)}>
      <div className="row">
        <h2>You'll {option}</h2>
      </div>
      <div>
        <a
          className="btn mx-3 btn-light"
          href="#"
          role="button"
          onClick={handleClear}
        >
          Choose again
        </a>
        <button type="submit" className="btn m-3 btn-primary">
          Save
        </button>
      </div>
    </form>
  );
}
