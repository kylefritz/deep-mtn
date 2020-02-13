import React, {useState} from 'react'
import axios from 'axios'
import * as Sentry from '@sentry/browser'
import queryString from 'query-string'
import _ from 'lodash'

import Summary from "./summary";
import Q1 from './q1_you_coming';
import Q2 from "./q2_how_many";
import Q3 from "./q3_events";
import Q4 from "./q4_accommodations";

export default function ShouldICamp() {
  const [currentQ, setCurrentQ] = useState(null);
  const questions = [Q1, Q2, Q3, Q4].map(Q => {
    const [answer, setAnswer] = useState(null);
    return [Q, answer, setAnswer];
  });

  if(!_.isNull(currentQ))
  {
    const [Q, answer, setAnswer] = questions[currentQ]
    return <Q answer={answer} onAnswer={(nextAnswer) =>{
      setAnswer(nextAnswer);
      setCurrentQ(null);
    }} />;
  }

  return <Summary questions={questions} onSetQuestion={setCurrentQ} />
}
