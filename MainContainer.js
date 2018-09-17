import styled, { css } from 'styled-components';
import theme from 'common/Theme.js';

const MainContainer = styled.div`
  min-height: 100vh;
  width: 100vw;
	background: #f6f5f7;
  font-family: ${theme.typography.fontFamily.sansSerif};
  color: ${theme.color.textColor};
  box-sizing: border-box;
`;

export default MainContainer;
