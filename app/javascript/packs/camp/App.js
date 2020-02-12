import React, {useState} from 'react'
import axios from 'axios'
import * as Sentry from '@sentry/browser'
import queryString from 'query-string'
import { useForm } from 'react-hook-form'
import _ from 'lodash'

import Q1 from './q1_you_coming';
import Q2 from "./q2_how_many";
import Q3 from "./q3_events";

export default function ShouldICamp() {
  const [question, setQuestion] = useState(3); // TODO: set to 1

  return _.chain([Q1, Q2, Q3]).map((Q, i) => 
    (i + 1) == question && <Q onDone={() => setQuestion((i + 2))} />
  ).compact().first().value();
}
