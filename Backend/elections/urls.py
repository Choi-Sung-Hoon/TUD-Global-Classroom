from django.conf.urls import url
from . import views

app_name = 'elections'
urlpatterns =\
[
    url('^$', views.index, name = 'home'),
    url('^areas/(?P<area>[가-힣]+)/$', views.areas),
    url('^areas/(?P<area>[가-힣]+)/results/$', views.results),
    url('^polls/(?P<poll_id>\d+)/$', views.polls),
    url('^candidates/(?P<name>[가-힣]+)/$', views.candidates),
]