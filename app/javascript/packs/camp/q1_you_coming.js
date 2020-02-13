import React, { useState } from "react";
import _ from "lodash";

export default function Q1({ onAnswer: handleAnswer }) {
  const [rsvp, setRsvp] = useState(null);

  const handleRsvp = coming => {
    if (coming) {
      handleAnswer("Yes!");
    } else {
      setRsvp(false);
    }
  };

  if (_.isNull(rsvp)) {
    return <Question onRsvp={handleRsvp} />;
  }

  if (!rsvp) {
    return <Bummer />;
  }
}
Q1.question = "Are you coming?!";

function Question({ onRsvp: handleRsvp }) {
  return (
    <>
      <h1>{Q1.question}</h1>
      <button
        type="button"
        className="btn m-3 btn-primary"
        onClick={() => handleRsvp(true)}
      >
        YES
      </button>
      <button
        type="button"
        className="btn m-3 btn-light"
        onClick={() => handleRsvp(false)}
      >
        NO
      </button>
    </>
  );
}

function Bummer() {
  return (
    <>
      <h1>Bummer!</h1>
      <form>
        <div class="form-group">
          <label htmlFor="whyyy">Awww, we really wanted you there</label>
          <textarea className="form-control" id="whyyy" />
          <small className="form-text text-muted">
            Please leave us a note if there's anything we can do to accommodate
            you.
          </small>
        </div>

        <button type="button" className="btn btn-primary">
          Submit
        </button>
      </form>
    </>
  );
}
