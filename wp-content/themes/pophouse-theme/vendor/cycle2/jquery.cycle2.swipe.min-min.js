!function(e){"use strict";e.event.special.swipe=e.event.special.swipe||{scrollSupressionThreshold:10,durationThreshold:1e3,horizontalDistanceThreshold:30,verticalDistanceThreshold:75,setup:function(){var i=e(this);i.bind("touchstart",function(t){function s(i){if(r){var t=i.originalEvent.touches?i.originalEvent.touches[0]:i;o={time:(new Date).getTime(),coords:[t.pageX,t.pageY]},Math.abs(r.coords[0]-o.coords[0])>e.event.special.swipe.scrollSupressionThreshold&&i.preventDefault()}}var o,n=t.originalEvent.touches?t.originalEvent.touches[0]:t,r={time:(new Date).getTime(),coords:[n.pageX,n.pageY],origin:e(t.target)};i.bind("touchmove",s).one("touchend",function(){i.unbind("touchmove",s),r&&o&&o.time-r.time<e.event.special.swipe.durationThreshold&&Math.abs(r.coords[0]-o.coords[0])>e.event.special.swipe.horizontalDistanceThreshold&&Math.abs(r.coords[1]-o.coords[1])<e.event.special.swipe.verticalDistanceThreshold&&r.origin.trigger("swipe").trigger(r.coords[0]>o.coords[0]?"swipeleft":"swiperight"),r=o=void 0})})}},e.event.special.swipeleft=e.event.special.swipeleft||{setup:function(){e(this).bind("swipe",e.noop)}},e.event.special.swiperight=e.event.special.swiperight||e.event.special.swipeleft}(jQuery);