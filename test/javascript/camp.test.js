import React from 'react';
require('./configure_enzyme');
import { shallow } from 'enzyme';

import App from 'camp/App'

test('snapshot', () => {
  const wrapper = shallow(<App />);
  expect(wrapper).toMatchSnapshot();
});
