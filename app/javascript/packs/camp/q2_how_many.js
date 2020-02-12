import React, { useState } from "react";
import { useForm } from "react-hook-form";
import _ from "lodash";

export default function q2() {
  const [numGuests, setNumGuests] = useState(0);
  const { register, handleSubmit } = useForm();
  const onSubmit = data => {
    console.log(data);
  };

  const deleteLast = () => setNumGuests(numGuests - 1)

  return (
    <>
      <h1>Who is coming with you?</h1>
      <form onSubmit={handleSubmit(onSubmit)}>
        {_.range(numGuests).map(i => {
          const isLast = i == numGuests - 1;
          return (
            <Guest
              key={i}
              index={i}
              onDelete={isLast ? deleteLast : null}
              register={register}
            />
          );
        })}
        <a
          className="btn mx-3 btn-light"
          href="#"
          role="button"
          onClick={() => setNumGuests(numGuests + 1)}
        >
          Add guest
        </a>

        <button type="submit" className="btn mx-3 btn-primary" >
          Save
        </button>
      </form>
    </>
  );
}

export function Guest({ index, onDelete, register }) {
  return (
    <div className="form-group">
      {onDelete && (
        <a
          className="btn close"
          href="#"
          role="button"
          aria-label="Close"
          title="Remove guest"
          style={{ marginTop: "-8px" }}
          onClick={onDelete}
        >
          <span aria-hidden="true">&times;</span>
        </a>
      )}
      <label htmlFor={`guest-${index}`}>Guest #{index + 1}</label>
      <input
        className="form-control"
        id={`guest-${index}`}
        name={`guest-${index}`}
        ref={register}
        aria-describedby={`guest-${index}Help`}
      />
      <small
        id={`guest-${index}Help`}
        className="form-text text-muted"
      ></small>
    </div>
  );
}
