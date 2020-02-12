import React, {useState} from 'react'
import axios from 'axios'
import * as Sentry from '@sentry/browser'
import queryString from 'query-string'
import { useForm } from 'react-hook-form'
import _ from 'lodash'

import Question1 from './q1_you_coming';
import Question2 from "./q2_how_many";

export default function ShouldICamp() {
  const [question, setQuestion] = useState(2); // TODO: set to 1

  switch (question) {
    case 1:
      return <Question1 onDone={()=> setQuestion(2)} />;
    case 2:
      return <Question2 onDone={() => setQuestion(3)} />;
  }
}
