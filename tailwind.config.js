module.exports = {
  theme: {
    extend: {
        spacing: {
            '3px': '3px',
            '6px': '6px',
            '10px': '10px',
            '12px': '12px',
            '14px': '14px',
            '15px': '15px',
            '16px': '16px',
            '17px': '17px',
            '20px': '20px',
            '21px': '21px',
            '24px': '24px',
            '25px': '25px',
            '40px': '40px',
            '47px': '47px',
            '48px': '48px',
            '50px': '50px',
            '100px': '100px',
        },
        borderRadius: {
            'custom-1': '4px',
        },
        flex: {
            2: '2',
            3: '3',
        },
        fontFamily: {
            'rubik': ['Rubik','sans-serif'],
        },
    },
      customForms: theme => ({
          default: {
              'checkbox': {
                  color: theme('colors.blue.3'),
              },
          },
      }),
      'maxWidth': {
        '279px': '279px',
        '340px': '340px',
      },
      'colors': {
        'white': '#ffffff',
        'black': {
            1: '#161b3d',
        },
        'blue': {
            1: '#9fa9c5',
            2: '#eef2f9',
            3: '#0063aa',
            4: '#d2dde1',
            5: '#e0e3ec',
            6: '#eef0f9',
            7: '#f7f8ff',
            8: '#e1e6f3',
        },
        'green': {
            1: '#5aac44',
        },
        'yellow': {
            1: '#ff9131',
        },
      },
      'fontSize': {
        '12px': '12px',
        '13px': '13px',
        '14px': '14px',
        '18px': '18px',
      },
  },
  variants: {},
  plugins: [
      require('@tailwindcss/custom-forms'),
  ]
};
