import {
  formatCreditCard,
  getCreditCardType,
  formatDate,
  formatTime,
  formatNumeral,
  formatGeneral,
  registerCursorTracker
} from 'cleave-zen';

window.registerCursorTracker = registerCursorTracker;
window.formatCreditCard = formatCreditCard;
window.getCreditCardType = getCreditCardType;
window.formatDate = formatDate;
window.formatTime = formatTime;
window.formatNumeral = formatNumeral;
window.formatGeneral = formatGeneral;

// Optionally group them:
window.CleaveZen = {
  formatCreditCard,
  getCreditCardType,
  formatDate,
  formatTime,
  formatNumeral,
  formatGeneral,
  registerCursorTracker
};
