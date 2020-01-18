module.exports = {
  theme: {
    extend: {
        spacing: {
            '2px': '2px',
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
            '27px': '27px',
            '40px': '40px',
            '47px': '47px',
            '48px': '48px',
            '50px': '50px',
            '92px': '92px',
            '98px': '98px',
            '100px': '100px',
            '157px': '157px',
            '168px': '168px',
        },
        borderRadius: {
            'custom-1': '4px',
        },
        letterSpacing: {
            'custom-1': '0.23px'
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
            9: '#e1e4ef',
            10: '#eef0f9',
        },
        'green': {
            1: '#5aac44',
        },
        'yellow': {
            1: '#ff9131',
        },
        'purple': {
            1: '#afacc9',
        },
      },
      'fontSize': {
        '12px': '12px',
        '13px': '13px',
        '14px': '14px',
        '16px': '16px',
        '18px': '18px',
        '24px': '24px',
      },
  },
  variants: {},
  plugins: [
      require('@tailwindcss/custom-forms'),
  ]
};
