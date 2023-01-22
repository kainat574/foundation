let cs = new Coinswitch("XaEIgIztsj9kSLwi3gutsRg949pjH021S3y3QVJf");

document.getElementById('launch').addEventListener('click', function() {
  /* This is the public interface */
  let config = {
    payout: {
      currency: 'btc',
      address: '1MN6szRdCDToxUnDMkH3w8VVyPtwoQHBDe',
      amount: 0.05,
    },
    ui_customization: {
      description: 'This is my cool description',
      logo: 'https://s3-ap-southeast-1.amazonaws.com/cs-public-uploads-prod/b20a0204-d741-4867-a967-410f2a416d8a',
      title: 'Welcome to the future',
      theme: '#2a2f46'
    },
    domain: 'https://coinswitch.co'

  }
  cs.open(config);
})

cs.on('Invoice:Ready', function() {
    console.log('Invoice is ready for use');
})
cs.on('Invoice:Created', function(e) {
    console.log('Order has been created', e);
})
cs.on('Invoice:onStatusChange', function(e) {
    console.log('Status Changed', e);
})
cs.on('Payment:Detected', function(e) {
    console.log('Payment Detected', e);
})
cs.on('Payment:Complete', function(e) {
    console.log('Payment Complete', e);
})
cs.on('Invoice:Closed', function(e) {
    console.log('Invoice Closed', e);
})
