import React, {useState} from "react";
import _ from "lodash";

export default function Q1({onDone}) {
  const [rsvp, setRsvp] = useState(null);

  const handleRsvp = (coming) => {
    if (coming) {
      onDone();
    } else {
      setRsvp(false);
    }
  }

  if(_.isNull(rsvp)){
    return <Question onRsvp={handleRsvp} />;
  }

  if(!rsvp){
    return <Bummer />;
  }
}

export function Question({ onRsvp: handleRsvp }) {
         return (
           <>
             <h1>Hello, Meghan!</h1>
             <p>
               We're so looking forward to hosting you for our wedding at Deep
               Mountain.
             </p>
             <p>Let's start with an easy question...</p>
             <h2>Are you coming?!</h2>
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

export function Bummer() {
  return (
    <>
      <h1>Bummer!</h1>
      <form>
        <div class="form-group">
          <label htmlFor="whyyy">
            Awww, we really wanted you there
          </label>
          <textarea className="form-control" id="whyyy" />
          <small className="form-text text-muted">
            Please leave us a note if there's anything we can do to accommodate you.
          </small>
        </div>

        <button type="button" className="btn btn-primary">
          Submit
        </button>
      </form>
    </>
  );
}
